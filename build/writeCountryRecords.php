<?php declare(strict_types=1);

namespace hollodotme\ISO\CountryCodes\Build;

use DOMDocument;
use DOMNode;
use DOMXPath;
use function fclose;
use function fwrite;
use function sprintf;
use function str_replace;

$doc = new DOMDocument( '1.0', 'UTF-8' );
$doc->loadHTML( file_get_contents( __DIR__ . '/ISO-3166-1-CountryCodes.html' ) );
$xpath = new DOMXPath( $doc );
echo $doc->getElementsByTagName( 'tr' )->count();

$fileName = __DIR__ . '/../src/Data/CountryRecords.php';
$fh       = fopen( $fileName, 'w+b' );

fwrite( $fh, "<?php declare(strict_types=1);\n\n" );
fwrite( $fh, "namespace hollodotme\\ISO\\CountryCodes\\Data;\n\n" );
fwrite( $fh, "abstract class CountryRecords\n" );
fwrite( $fh, "{\n" );

$alpha2ToConstantNameMap      = [];
$alpha3ToConstantNameMap      = [];
$numericToConstantNameMap     = [];
$shortNameEnToConstantNameMap = [];
$shortNameFrToConstantNameMap = [];

/** @var DOMNode $tr */
foreach ( $doc->getElementsByTagName( 'tr' ) as $tr )
{
	$row = [];
	/** @var DOMNode $td */
	foreach ( $xpath->query( 'td', $tr ) ?: [] as $td )
	{
		$row[] = trim( str_replace( ' ', ' ', $td->nodeValue ) );
	}

	if ( !$row )
	{
		continue;
	}

	[$shortNameEn, $shortNameFr, $alpha2Code, $alpha3Code, $numericCode] = $row;

	fwrite(
		$fh,
		sprintf(
			<<<EOT
		private const %s = [
			"%s",
			"%s",
			"%s",
			"%s",
			"%s",
		];
	EOT,
			$alpha2Code,
			$shortNameEn,
			$shortNameFr,
			$alpha2Code,
			$alpha3Code,
			$numericCode,
		) . "\n\n"
	);

	$alpha2ToConstantNameMap[]      = sprintf( "'%s' => self::%s,", $alpha2Code, $alpha2Code );
	$alpha3ToConstantNameMap[]      = sprintf( "'%s' => self::%s,", $alpha3Code, $alpha2Code );
	$numericToConstantNameMap[]     = sprintf( "'%s' => self::%s,", $numericCode, $alpha2Code );
	$shortNameEnToConstantNameMap[] = sprintf( "\"%s\" => self::%s,", $shortNameEn, $alpha2Code );
	$shortNameFrToConstantNameMap[] = sprintf( "\"%s\" => self::%s,", $shortNameFr, $alpha2Code );

	echo implode( ' | ', $row );
	echo "\n";
}

fwrite(
	$fh,
	sprintf(
		<<<EOT
		private const ALPHA2_MAP = [
			%s
		];
	EOT,
		implode( "\n\t\t", $alpha2ToConstantNameMap ),
	) . "\n\n"
);

fwrite(
	$fh,
	sprintf(
		<<<EOT
		private const ALPHA3_MAP = [
			%s
		];
	EOT,
		implode( "\n\t\t", $alpha3ToConstantNameMap ),
	) . "\n\n"
);

fwrite(
	$fh,
	sprintf(
		<<<EOT
		private const NUMERIC_MAP = [
			%s
		];
	EOT,
		implode( "\n\t\t", $numericToConstantNameMap ),
	) . "\n\n"
);

fwrite(
	$fh,
	sprintf(
		<<<EOT
		private const SHORTNAME_MAP_EN = [
			%s
		];
	EOT,
		implode( "\n\t\t", $shortNameEnToConstantNameMap ),
	) . "\n\n"
);

fwrite(
	$fh,
	sprintf(
		<<<EOT
		private const SHORTNAME_MAP_FR = [
			%s
		];
	EOT,
		implode( "\n\t\t", $shortNameFrToConstantNameMap ),
	) . "\n\n"
);

fwrite(
	$fh,
	<<<'EOF'
		/**
		 * @param string $alpha2Code
		 *
		 * @return array<string>
		 */
		final public static function getRecordByAlpha2Code( string $alpha2Code ) : array
		{
			return self::ALPHA2_MAP[ $alpha2Code ] ?? [];
		}
	EOF. "\n\n"
);

fwrite(
	$fh,
	<<<'EOF'
		/**
		 * @param string $alpha3Code
		 *
		 * @return array<string>
		 */
		final public static function getRecordByAlpha3Code( string $alpha3Code ) : array
		{
			return self::ALPHA3_MAP[ $alpha3Code ] ?? [];
		}
	EOF. "\n\n"
);

fwrite(
	$fh,
	<<<'EOF'
		/**
		 * @param string $numericCode
		 *
		 * @return array<string>
		 */
		final public static function getRecordByNumericCode( string $numericCode ) : array
		{
			return self::NUMERIC_MAP[ $numericCode ] ?? [];
		}
	EOF. "\n\n"
);

fwrite(
	$fh,
	<<<'EOF'
		/**
		 * @param string $englishShortName
		 *
		 * @return array<string>
		 */
		final public static function getRecordByEnglishShortName( string $englishShortName ) : array
		{
			return self::SHORTNAME_MAP_EN[ $englishShortName ] ?? [];
		}
	EOF. "\n\n"
);

fwrite(
	$fh,
	<<<'EOF'
		/**
		 * @param string $frenchShortName
		 *
		 * @return array<string>
		 */
		final public static function getRecordByFrenchShortName( string $frenchShortName ) : array
		{
			return self::SHORTNAME_MAP_FR[ $frenchShortName ] ?? [];
		}
	EOF. "\n\n"
);

fwrite(
	$fh,
	<<<'EOF'
		/**
		 * @return array<string, array<string>>
		 */
		final public static function getAllRecords() : array
		{
			return self::ALPHA2_MAP;
		}
	EOF
);

fwrite( $fh, "\n}\n" );
fclose( $fh );

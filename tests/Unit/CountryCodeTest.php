<?php declare(strict_types=1);

namespace hollodotme\ISO\CountryCodes\Tests\Unit;

use Generator;
use hollodotme\ISO\CountryCodes\CountryCode;
use hollodotme\ISO\CountryCodes\Data\CountryRecords;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use function iterator_to_array;

final class CountryCodeTest extends TestCase
{
	/**
	 * @dataProvider shortNameEnProvider
	 *
	 * @param string $englishShortName
	 * @param string $expectedShortNameEn
	 * @param string $expectedShortNameFr
	 * @param string $expectedAlpha2Code
	 * @param string $expectedAlpha3Code
	 * @param string $expectedNumericCode
	 */
	public function testFromEnglishShortNameCode(
		string $englishShortName,
		string $expectedShortNameEn,
		string $expectedShortNameFr,
		string $expectedAlpha2Code,
		string $expectedAlpha3Code,
		string $expectedNumericCode
	) : void
	{
		$countryCode = CountryCode::fromEnglishShortName( $englishShortName );

		self::assertSame( $expectedShortNameEn, $countryCode->getEnglishShortName() );
		self::assertSame( $expectedShortNameFr, $countryCode->getFrenchShortName() );
		self::assertSame( $expectedAlpha2Code, $countryCode->getAlpha2Code() );
		self::assertSame( $expectedAlpha3Code, $countryCode->getAlpha3Code() );
		self::assertSame( $expectedNumericCode, $countryCode->getNumericCode() );
	}

	/**
	 * @return Generator<array<string>>
	 */
	public function shortNameEnProvider() : Generator
	{
		foreach ( CountryRecords::getAllRecords() as $record )
		{
			yield [$record[0], ...$record];
		}
	}

	public function testFromEnglishShortNameThrowsExceptionForInvalidCode() : void
	{
		$this->expectException( InvalidArgumentException::class );
		$this->expectExceptionMessage( 'Could not find country code for "Unit-Test-Land"' );

		CountryCode::fromEnglishShortName( 'Unit-Test-Land' );
	}

	/**
	 * @dataProvider shortNameFrProvider
	 *
	 * @param string $frenchShortName
	 * @param string $expectedShortNameEn
	 * @param string $expectedShortNameFr
	 * @param string $expectedAlpha2Code
	 * @param string $expectedAlpha3Code
	 * @param string $expectedNumericCode
	 */
	public function testFromFrenchShortNameCode(
		string $frenchShortName,
		string $expectedShortNameEn,
		string $expectedShortNameFr,
		string $expectedAlpha2Code,
		string $expectedAlpha3Code,
		string $expectedNumericCode
	) : void
	{
		$countryCode = CountryCode::fromFrenchShortName( $frenchShortName );

		self::assertSame( $expectedShortNameEn, $countryCode->getEnglishShortName() );
		self::assertSame( $expectedShortNameFr, $countryCode->getFrenchShortName() );
		self::assertSame( $expectedAlpha2Code, $countryCode->getAlpha2Code() );
		self::assertSame( $expectedAlpha3Code, $countryCode->getAlpha3Code() );
		self::assertSame( $expectedNumericCode, $countryCode->getNumericCode() );
	}

	/**
	 * @return Generator<array<string>>
	 */
	public function shortNameFrProvider() : Generator
	{
		foreach ( CountryRecords::getAllRecords() as $record )
		{
			yield [$record[1], ...$record];
		}
	}

	public function testFromFrenchShortNameThrowsExceptionForInvalidCode() : void
	{
		$this->expectException( InvalidArgumentException::class );
		$this->expectExceptionMessage( 'Could not find country code for "Terrain d\'essai unitaire"' );

		CountryCode::fromFrenchShortName( "Terrain d'essai unitaire" );
	}

	/**
	 * @dataProvider alpha2CodeProvider
	 *
	 * @param string $alpha2Code
	 * @param string $expectedShortNameEn
	 * @param string $expectedShortNameFr
	 * @param string $expectedAlpha2Code
	 * @param string $expectedAlpha3Code
	 * @param string $expectedNumericCode
	 */
	public function testFromAlpha2Code(
		string $alpha2Code,
		string $expectedShortNameEn,
		string $expectedShortNameFr,
		string $expectedAlpha2Code,
		string $expectedAlpha3Code,
		string $expectedNumericCode
	) : void
	{
		$countryCode = CountryCode::fromAlpha2Code( $alpha2Code );

		self::assertSame( $expectedShortNameEn, $countryCode->getEnglishShortName() );
		self::assertSame( $expectedShortNameFr, $countryCode->getFrenchShortName() );
		self::assertSame( $expectedAlpha2Code, $countryCode->getAlpha2Code() );
		self::assertSame( $expectedAlpha3Code, $countryCode->getAlpha3Code() );
		self::assertSame( $expectedNumericCode, $countryCode->getNumericCode() );
	}

	/**
	 * @return Generator<array<string>>
	 */
	public function alpha2CodeProvider() : Generator
	{
		foreach ( CountryRecords::getAllRecords() as $record )
		{
			yield [$record[2], ...$record];
		}
	}

	public function testFromAlpha2CodeThrowsExceptionForInvalidCode() : void
	{
		$this->expectException( InvalidArgumentException::class );
		$this->expectExceptionMessage( 'Could not find country code for "ZZ"' );

		CountryCode::fromAlpha2Code( 'ZZ' );
	}

	/**
	 * @dataProvider alpha3CodeProvider
	 *
	 * @param string $alpha3Code
	 * @param string $expectedShortNameEn
	 * @param string $expectedShortNameFr
	 * @param string $expectedAlpha2Code
	 * @param string $expectedAlpha3Code
	 * @param string $expectedNumericCode
	 */
	public function testFromAlpha3Code(
		string $alpha3Code,
		string $expectedShortNameEn,
		string $expectedShortNameFr,
		string $expectedAlpha2Code,
		string $expectedAlpha3Code,
		string $expectedNumericCode
	) : void
	{
		$countryCode = CountryCode::fromAlpha3Code( $alpha3Code );

		self::assertSame( $expectedShortNameEn, $countryCode->getEnglishShortName() );
		self::assertSame( $expectedShortNameFr, $countryCode->getFrenchShortName() );
		self::assertSame( $expectedAlpha2Code, $countryCode->getAlpha2Code() );
		self::assertSame( $expectedAlpha3Code, $countryCode->getAlpha3Code() );
		self::assertSame( $expectedNumericCode, $countryCode->getNumericCode() );
	}

	/**
	 * @return Generator<array<string>>
	 */
	public function alpha3CodeProvider() : Generator
	{
		foreach ( CountryRecords::getAllRecords() as $record )
		{
			yield [$record[3], ...$record];
		}
	}

	public function testFromAlpha3CodeThrowsExceptionForInvalidCode() : void
	{
		$this->expectException( InvalidArgumentException::class );
		$this->expectExceptionMessage( 'Could not find country code for "ZZZ"' );

		CountryCode::fromAlpha3Code( 'ZZZ' );
	}

	/**
	 * @dataProvider numericCodeProvider
	 *
	 * @param string $numericCode
	 * @param string $expectedShortNameEn
	 * @param string $expectedShortNameFr
	 * @param string $expectedAlpha2Code
	 * @param string $expectedAlpha3Code
	 * @param string $expectedNumericCode
	 */
	public function testFromNumericCode(
		string $numericCode,
		string $expectedShortNameEn,
		string $expectedShortNameFr,
		string $expectedAlpha2Code,
		string $expectedAlpha3Code,
		string $expectedNumericCode
	) : void
	{
		$countryCode = CountryCode::fromNumericCode( $numericCode );

		self::assertSame( $expectedShortNameEn, $countryCode->getEnglishShortName() );
		self::assertSame( $expectedShortNameFr, $countryCode->getFrenchShortName() );
		self::assertSame( $expectedAlpha2Code, $countryCode->getAlpha2Code() );
		self::assertSame( $expectedAlpha3Code, $countryCode->getAlpha3Code() );
		self::assertSame( $expectedNumericCode, $countryCode->getNumericCode() );
	}

	/**
	 * @return Generator<array<string>>
	 */
	public function numericCodeProvider() : Generator
	{
		foreach ( CountryRecords::getAllRecords() as $record )
		{
			yield [$record[4], ...$record];
		}
	}

	public function testFromNumericCodeThrowsExceptionForInvalidCode() : void
	{
		$this->expectException( InvalidArgumentException::class );
		$this->expectExceptionMessage( 'Could not find country code for "000"' );

		CountryCode::fromNumericCode( '000' );
	}

	public function testAll() : void
	{
		$allCountryCodes = [];
		foreach ( CountryRecords::getAllRecords() as $record )
		{
			$allCountryCodes[] = CountryCode::fromAlpha2Code( $record[2] );
		}

		self::assertEquals(
			$allCountryCodes,
			iterator_to_array( CountryCode::all(), false )
		);
	}
}

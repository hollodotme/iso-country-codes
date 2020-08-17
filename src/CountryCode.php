<?php declare(strict_types=1);

namespace hollodotme\ISO\CountryCodes;

use hollodotme\ISO\CountryCodes\Data\CountryRecords;
use InvalidArgumentException;
use Iterator;

final class CountryCode
{
	private string $englishShortName;
	private string $frenchShortName;
	private string $alpha2Code;
	private string $alpha3Code;
	private string $numericCode;

	private function __construct(
		string $englishShortName,
		string $frenchShortName,
		string $alpha2Code,
		string $alpha3Code,
		string $numericCode
	)
	{
		$this->englishShortName = $englishShortName;
		$this->frenchShortName  = $frenchShortName;
		$this->alpha2Code       = $alpha2Code;
		$this->alpha3Code       = $alpha3Code;
		$this->numericCode      = $numericCode;
	}

	public function getEnglishShortName() : string
	{
		return $this->englishShortName;
	}

	public function getFrenchShortName() : string
	{
		return $this->frenchShortName;
	}

	public function getAlpha2Code() : string
	{
		return $this->alpha2Code;
	}

	public function getAlpha3Code() : string
	{
		return $this->alpha3Code;
	}

	public function getNumericCode() : string
	{
		return $this->numericCode;
	}

	/**
	 * @param string $alpha2Code
	 *
	 * @return CountryCode
	 * @throws InvalidArgumentException
	 */
	public static function fromAlpha2Code( string $alpha2Code ) : self
	{
		return self::newFromRecord( CountryRecords::getRecordByAlpha2Code( $alpha2Code ), $alpha2Code );
	}

	/**
	 * @param string $alpha3Code
	 *
	 * @return CountryCode
	 * @throws InvalidArgumentException
	 */
	public static function fromAlpha3Code( string $alpha3Code ) : self
	{
		return self::newFromRecord( CountryRecords::getRecordByAlpha3Code( $alpha3Code ), $alpha3Code );
	}

	/**
	 * @param string $numericCode
	 *
	 * @return CountryCode
	 * @throws InvalidArgumentException
	 */
	public static function fromNumericCode( string $numericCode ) : self
	{
		return self::newFromRecord( CountryRecords::getRecordByNumericCode( $numericCode ), $numericCode );
	}

	/**
	 * @param string $englishShortName
	 *
	 * @return CountryCode
	 * @throws InvalidArgumentException
	 */
	public static function fromEnglishShortName( string $englishShortName ) : self
	{
		return self::newFromRecord(
			CountryRecords::getRecordByEnglishShortName( $englishShortName ),
			$englishShortName
		);
	}

	/**
	 * @param string $frenchShortName
	 *
	 * @return CountryCode
	 * @throws InvalidArgumentException
	 */
	public static function fromFrenchShortName( string $frenchShortName ) : self
	{
		return self::newFromRecord(
			CountryRecords::getRecordByFrenchShortName( $frenchShortName ),
			$frenchShortName
		);
	}

	/**
	 * @param array<string> $record
	 * @param string        $searchTerm
	 *
	 * @return CountryCode
	 * @throws InvalidArgumentException
	 */
	private static function newFromRecord( array $record, string $searchTerm ) : self
	{
		if ( [] === $record )
		{
			throw new InvalidArgumentException(
				sprintf( 'Could not find country code for "%s"', $searchTerm )
			);
		}

		return new self( ...$record );
	}

	/**
	 * @return Iterator<CountryCode>
	 */
	public static function all() : Iterator
	{
		foreach ( CountryRecords::getAllRecords() as $record )
		{
			yield self::newFromRecord( $record, '[all]' );
		}
	}
}

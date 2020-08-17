![Unit tests](https://github.com/hollodotme/iso-country-codes/workflows/Unit%20tests/badge.svg)
![Static analysis](https://github.com/hollodotme/iso-country-codes/workflows/Static%20analysis/badge.svg)

# ISO-3166-1 country codes

This is a statically generated value object collection of [ISO-3166-1](https://en.wikipedia.org/wiki/ISO_3166-1) country 
codes with their following representations:

* English short name
* French short name
* Alpha-2 code
* Alpha-3 code
* Numeric code

Source of the data is: https://www.iso.org/obp/ui/#search/code/

## Requirements

* PHP >= 7.4

## Installation

The recommended way to install this library is using [composer](https://getcomposer.org).

```bash
composer require "hollodotme/iso-country-codes"
```

## Usage

### From English short name

```php
<?php declare(strict_types=1);

use hollodotme\ISO\CountryCodes\CountryCode;

$countryCode = CountryCode::fromEnglishShortName( 'New Caledonia' );

echo $countryCode->getEnglishShortName(), "\n";
echo $countryCode->getFrenchShortName(), "\n";
echo $countryCode->getAlpha2Code(), "\n";
echo $countryCode->getAlpha3Code(), "\n";
echo $countryCode->getNumericCode();
```

**Prints:**
```
New Caledonia
Nouvelle-Calédonie (la)
NC
NCL
540
```

### From French short name

```php
<?php declare(strict_types=1);

use hollodotme\ISO\CountryCodes\CountryCode;

$countryCode = CountryCode::fromFrenchShortName( 'Nouvelle-Calédonie (la)' );

echo $countryCode->getEnglishShortName(), "\n";
echo $countryCode->getFrenchShortName(), "\n";
echo $countryCode->getAlpha2Code(), "\n";
echo $countryCode->getAlpha3Code(), "\n";
echo $countryCode->getNumericCode();
```

**Prints:**
```
New Caledonia
Nouvelle-Calédonie (la)
NC
NCL
540
```

### From alpha-2 code

```php
<?php declare(strict_types=1);

use hollodotme\ISO\CountryCodes\CountryCode;

$countryCode = CountryCode::fromAlpha2Code( 'NC' );

echo $countryCode->getEnglishShortName(), "\n";
echo $countryCode->getFrenchShortName(), "\n";
echo $countryCode->getAlpha2Code(), "\n";
echo $countryCode->getAlpha3Code(), "\n";
echo $countryCode->getNumericCode();
```

**Prints:**
```
New Caledonia
Nouvelle-Calédonie (la)
NC
NCL
540
```


### From alpha-3 code

```php
<?php declare(strict_types=1);

use hollodotme\ISO\CountryCodes\CountryCode;

$countryCode = CountryCode::fromAlpha3Code( 'NCL' );

echo $countryCode->getEnglishShortName(), "\n";
echo $countryCode->getFrenchShortName(), "\n";
echo $countryCode->getAlpha2Code(), "\n";
echo $countryCode->getAlpha3Code(), "\n";
echo $countryCode->getNumericCode();
```

**Prints:**
```
New Caledonia
Nouvelle-Calédonie (la)
NC
NCL
540
```


### From numeric code

```php
<?php declare(strict_types=1);

use hollodotme\ISO\CountryCodes\CountryCode;

$countryCode = CountryCode::fromNumericCode( '540' );

echo $countryCode->getEnglishShortName(), "\n";
echo $countryCode->getFrenchShortName(), "\n";
echo $countryCode->getAlpha2Code(), "\n";
echo $countryCode->getAlpha3Code(), "\n";
echo $countryCode->getNumericCode();
```

**Prints:**
```
New Caledonia
Nouvelle-Calédonie (la)
NC
NCL
540
```
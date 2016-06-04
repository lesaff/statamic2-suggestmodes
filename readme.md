# Statamic v2.x Suggest Mode Collection
by Rudy Affandi (2016)

## What are these?
These are a bunch of useful `SuggestMode` addon for Statamic v2.x. 

### Countries
List of world country names in ISO format (full English spelling)

### CountriesIso2
List of world country names in ISO 3166-1 alpha-2 format (2 character abbreviation)

### CountriesIso3
List of world country names in ISO 3166-1 alpha-3 format (3 character abbreviation)

### StatesProvinces
List of US and Canada states/provinces names (full English spelling)

### StatesProvincesAbbr
List of US and Canada states/provinces names (2 character abbreviation)

## Installation
Copy the folder to your `site/addons` folder in your Statamic v2.x installation

## How to use
Add `mode: Countries` or `mode: StateProvincesAbbr` to your suggest field 

## Examples
```
  country:
    type: suggest
    mode: CountriesIso2
    max_items: 1
    display: Country (Abbr)
```
or
```
  prov:
    type: suggest
    mode: StatesProvincesAbbr
    display: Province/State
    width: 50
```

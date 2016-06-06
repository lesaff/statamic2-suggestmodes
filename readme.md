# Statamic v2.x Suggest Mode Collection
by Rudy Affandi (2016)

## What are these?
These are a bunch of useful `SuggestMode` addon for Statamic v2.x. 

![screen shot 2016-06-06 at 9 49 41 am](https://cloud.githubusercontent.com/assets/1151181/15822493/6a7ffc84-2bcc-11e6-91ac-938f0fa72e3c.png)
![screen shot 2016-06-06 at 9 50 11 am](https://cloud.githubusercontent.com/assets/1151181/15822497/6d9d1e10-2bcc-11e6-9d2e-a9587bdf2548.png)

## Countries
List of world country names in ISO format (full English spelling)

#### How to use
To return a list of country names in full English spelling
```
  country:
    type: suggest
    mode: Countries
    param: full
    max_items: 1
    display: Country (Full English spelling)
```
To return a list of country names in 2 character abbreviation (ISO2)
```
  country:
    type: suggest
    mode: Countries
    param: iso2
    max_items: 1
    display: Country (ISO2 abbreviation)
```
To return a list of country names in 3 character abbreviation (ISO3)
```
  country:
    type: suggest
    mode: Countries
    param: iso3
    max_items: 1
    display: Country (ISO3 abbreviation)
```

## StatesProvinces
List of US and Canada states/provinces names (full English spelling)

#### How to use
To return a list of US and Canada states/provinces names in full English spelling
```
  state_province:
    type: suggest
    mode: StatesProvinces
    param: full
    max_items: 1
    display: State/Province (Full English spelling)
```
To return a list of US and Canada states/provinces names in 2 character abbreviation
```
  state_province:
    type: suggest
    mode: StatesProvinces
    param: abbr
    max_items: 1
    display: State/Province (Full English spelling)
```
## Installation
Copy the folder to your `site/addons` folder in your Statamic v2.x installation

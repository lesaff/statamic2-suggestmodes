# Statamic v2.x Suggest Mode Collection
by Rudy Affandi (2016)

## What are these?
These are a bunch of useful `SuggestMode` addon for Statamic v2.x. 

## Installation
Copy the one or more folder(s) to your `site/addons` folder in your Statamic v2.x installation

## Index
[1. Countries](#countries)  
[2. State and Provinces](#statesprovinces)  
[3. Collections](#collections)  
[4. Forms](#forms)  

## Countries
List of world country names in ISO format (full English spelling)

![screen shot 2016-06-06 at 9 49 41 am](https://cloud.githubusercontent.com/assets/1151181/15822493/6a7ffc84-2bcc-11e6-91ac-938f0fa72e3c.png)

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

![screen shot 2016-06-06 at 9 50 11 am](https://cloud.githubusercontent.com/assets/1151181/15822497/6d9d1e10-2bcc-11e6-9d2e-a9587bdf2548.png)

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

## Collections
List all available collections

![screen shot 2016-06-07 at 7 53 52 am](https://cloud.githubusercontent.com/assets/1151181/15855321/38ad2100-2c85-11e6-806b-60da83053749.png)

#### How to use
To return a list of all your available collections
```
  rss_feed:
    type: suggest
    mode: Collections
    display: RSS Feed
    instructions: Select which collection(s) to use for your RSS Feed
```

## Forms
List all available forms

![screenshot 2016-09-06 11 57 29](https://cloud.githubusercontent.com/assets/414211/18286851/7b24227c-7429-11e6-80e3-b80a5be3895f.png)

#### How to use
To return a list of all your available forms
```
  form:
    type: suggest
    mode: forms
    max_items: 1
    display: Form
```

To output your form automagically
```
{{ form:create in="{form}" }}
    {{ fields }}
      <div class="form-group">
        <label>{{ display }}</label>
        {{ if field == "email" }}
          <input type="text" name="{{ field }}" value="{{ old:email }}" class="form-control" />
        {{ elseif field == "number" }}
          <input type="number" name="{{ field }}" value="{{ old:number }}" class="form-control" />
        {{ elseif field == "comment" }}
          <textarea name="{{ field }}" class="form-control">{{ old:comment }}</textarea>
        {{ else }}
          <input type="text" name="{{ field }}" value="{{ old }}" class="form-control" />
        {{ /if }}
      </div>
    {{ /fields }}
    <button class="btn btn-primary">Submit</button>
{{ /form:create }}
```

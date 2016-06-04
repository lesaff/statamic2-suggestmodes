<?php namespace Statamic\Addons\StatesProvincesAbbr;

use Statamic\Addons\Suggest\Modes\AbstractMode;

class StatesProvincesAbbrSuggestMode extends AbstractMode
{
    public function suggestions()
    {

        return [
            ["value" => "AB", "text" => "AB - Alberta"], 
            ["value" => "BC", "text" => "BC - British Columbia"], 
            ["value" => "MB", "text" => "MB - Manitoba"], 
            ["value" => "NB", "text" => "NB - New Brunswick"], 
            ["value" => "NL", "text" => "NL - Newfoundland and Labrador"], 
            ["value" => "NS", "text" => "NS - Nova Scotia"], 
            ["value" => "NT", "text" => "NT - Northwest Territories"], 
            ["value" => "NU", "text" => "NU - Nunavut"], 
            ["value" => "\"ON\"", "text" => "ON - Ontario"], 
            ["value" => "PE", "text" => "PE - Prince Edward Island"], 
            ["value" => "QC", "text" => "QC - Quebec"], 
            ["value" => "SK", "text" => "SK - Saskatchewan"], 
            ["value" => "YT", "text" => "YT - Yukon Territory"], 
            ["value" => "AL", "text" => "AL - Alabama"], 
            ["value" => "AK", "text" => "AK - Alaska"], 
            ["value" => "AZ", "text" => "AZ - Arizona"], 
            ["value" => "AR", "text" => "AR - Arkansas"], 
            ["value" => "CA", "text" => "CA - California"], 
            ["value" => "CO", "text" => "CO - Colorado"], 
            ["value" => "CT", "text" => "CT - Connecticut"], 
            ["value" => "DE", "text" => "DE - Delaware"], 
            ["value" => "DC", "text" => "DC - District of Columbia"], 
            ["value" => "FL", "text" => "FL - Florida"], 
            ["value" => "GA", "text" => "GA - Georgia"], 
            ["value" => "HI", "text" => "HI - Hawaii"], 
            ["value" => "ID", "text" => "ID - Idaho"], 
            ["value" => "IL", "text" => "IL - Illinois"], 
            ["value" => "IN", "text" => "IN - Indiana"], 
            ["value" => "IA", "text" => "IA - Iowa"], 
            ["value" => "KS", "text" => "KS - Kansas"], 
            ["value" => "KY", "text" => "KY - Kentucky"], 
            ["value" => "LA", "text" => "LA - Louisiana"], 
            ["value" => "ME", "text" => "ME - Maine"], 
            ["value" => "MD", "text" => "MD - Maryland"], 
            ["value" => "MA", "text" => "MA - Massachusetts"], 
            ["value" => "MI", "text" => "MI - Michigan"], 
            ["value" => "MN", "text" => "MN - Minnesota"], 
            ["value" => "MS", "text" => "MS - Mississippi"], 
            ["value" => "MO", "text" => "MO - Missouri"], 
            ["value" => "MT", "text" => "MT - Montana"], 
            ["value" => "NE", "text" => "NE - Nebraska"], 
            ["value" => "NV", "text" => "NV - Nevada"], 
            ["value" => "NH", "text" => "NH - New Hampshire"], 
            ["value" => "NJ", "text" => "NJ - New Jersey"], 
            ["value" => "NM", "text" => "NM - New Mexico"], 
            ["value" => "NY", "text" => "NY - New York"], 
            ["value" => "NC", "text" => "NC - North Carolina"], 
            ["value" => "ND", "text" => "ND - North Dakota"], 
            ["value" => "OH", "text" => "OH - Ohio"], 
            ["value" => "OK", "text" => "OK - Oklahoma"], 
            ["value" => "OR", "text" => "OR - Oregon"], 
            ["value" => "PA", "text" => "PA - Pennsylvania"], 
            ["value" => "RI", "text" => "RI - Rhode Island"], 
            ["value" => "SC", "text" => "SC - South Carolina"], 
            ["value" => "SD", "text" => "SD - South Dakota"], 
            ["value" => "TN", "text" => "TN - Tennessee"], 
            ["value" => "TX", "text" => "TX - Texas"], 
            ["value" => "UT", "text" => "UT - Utah"], 
            ["value" => "VT", "text" => "VT - Vermont"], 
            ["value" => "VA", "text" => "VA - Virginia"], 
            ["value" => "WA", "text" => "WA - Washington"], 
            ["value" => "WV", "text" => "WV - West Virginia"], 
            ["value" => "WI", "text" => "WI - Wisconsin"], 
            ["value" => "WY", "text" => "WY - Wyoming"]
        ];

    }
}
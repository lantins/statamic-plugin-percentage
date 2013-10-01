Statamic Plugin - Percentage
============================

Calculate a percentage within statamic templates, handy for CSS progress bars.

## Installing

1. Download the zip file (or clone via git) from this GitHub repo into `/_add-ons/`.
2. Ensure the folder name is `percentage`.
3. Enjoy.

## Example Usage

Calculate a percentage (giving 35 as the result):
    
    {{ percentage given="0.35" of="1" }}
    
Using variables:

    {{ percentage given="{{funds_received}}" of="{{funds_required}}" }}

Specify a precision (number of decimal places):

    {{ percentage given="0.35" of="1" precision="2" }}

# MageGuide OverridePriceSortingAttribute
Tested on: ```2.3.x```

## Description
Replaces price value for sorting with the custom cvg_cron_price attribute

## Functionalities
- Module uses a simple override to change the price sorting attribute

## Installation
- Upload module files in ``app/code/MageGuide/OverridePriceSortingAttribute``
- Install module
```sh
        $ php bin/magento module:enable MageGuide_OverridePriceSortingAttribute
        $ php bin/magento setup:upgrade
        $ php bin/magento setup:di:compile
```

## ToDo
Module needs a system setting field to choose from all relative existing product attributes
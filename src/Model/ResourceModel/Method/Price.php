<?php

namespace MageGuide\OverridePriceSortingAttribute\Model\ResourceModel\Method;

class Price extends \Amasty\Sorting\Model\ResourceModel\Method\Price
{
	/**
     * {@inheritdoc}
     */
    public function apply($collection, $direction)
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAlias()
    {
        return 'cvg_cron_price';
    }
}

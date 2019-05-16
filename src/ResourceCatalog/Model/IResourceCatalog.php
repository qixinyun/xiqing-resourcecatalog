<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'FRJQTZZSXFB' => 1,
        'ZRRSXFB' => 2,
        'BWMXWCFJLGAJ' => 3,
        'BWMXWCFJLZJWZ' => 4,
        'BWMXWCFJLGAJJT' =>5,
        'XZCF' => 48,
        'XZXK' => 49,
        'TEST' => 500          
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL'], self::TYPE['XZCF'], self::TYPE['XZXK']),
        IUserGroup::ID['FGW'] => array(self::TYPE['TEST']),
        IUserGroup::ID['GAJ'] => array(self::TYPE['BWMXWCFJLGAJ'], self::TYPE['BWMXWCFJLGAJJT']),
        IUserGroup::ID['ZJWZ'] => array(self::TYPE['BWMXWCFJLZJWZ']),
        IUserGroup::ID['RMFY'] => array(self::TYPE['FRJQTZZSXFB'], self::TYPE['ZRRSXFB'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
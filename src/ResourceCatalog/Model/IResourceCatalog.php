<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'FRJQTZZSXFB' => 1,
        'ZRRSXFB' => 2,
        'XZCF' => 48,
        'XZXK' => 49,
        'TEST' => 500          
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL'], self::TYPE['XZCF'], self::TYPE['XZXK']),
        IUserGroup::ID['FGW'] => array(self::TYPE['TEST']),
        IUserGroup::ID['RMFY'] => array(self::TYPE['FRJQTZZSXFB'], self::TYPE['ZRRSXFB'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
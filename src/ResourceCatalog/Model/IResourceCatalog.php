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
        'BWMXWCFJLGAJJT' => 5,
        'BWMXWCFJLMZJWMBZ' => 6,
        'BWMXWCFJLZJJWMJY' => 7,
        'BWMXWCFJLQWLJWMLY' => 8,
        'TJQYFRGGXYZHPJJG' => 9,
        'QYYCMLXX' => 10,
        'QYJBXX' => 11,
        'XZCF' => 48,
        'XZXK' => 49,
        'TEST' => 500          
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL'], self::TYPE['XZCF'], self::TYPE['XZXK']),
        IUserGroup::ID['FGW'] => array(self::TYPE['TEST'], self::TYPE['TJQYFRGGXYZHPJJG']),
        IUserGroup::ID['GAJ'] => array(self::TYPE['BWMXWCFJLGAJ'], self::TYPE['BWMXWCFJLGAJJT']),
        IUserGroup::ID['ZJWZ'] => array(self::TYPE['BWMXWCFJLZJWZ']),
        IUserGroup::ID['MZJ'] => array(self::TYPE['BWMXWCFJLMZJWMBZ']),
        IUserGroup::ID['ZJJ'] => array(
            self::TYPE['BWMXWCFJLZJJWMJY'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYJBXX'],
        ),
        IUserGroup::ID['QWLJ'] => array(self::TYPE['BWMXWCFJLQWLJWMLY']),
        IUserGroup::ID['RMFY'] => array(self::TYPE['FRJQTZZSXFB'], self::TYPE['ZRRSXFB'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
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
        'QIYEJBXX' => 11,
        'XBXZCF' => 12,
        'XBXZXK' => 13,
        'XZCF' => 48,
        'XZXK' => 49,
        'GWYXX' => 50,
        'GZYXX' => 51,
        'HSZYZGZXX' => 52,
        'JCFLYZRYXX' => 53,
        'JFDXJBXX' => 54,
        'JSGRRYXX' => 55,
        'JSZGXX' => 56,
        'JTYS' => 57,
        'JYJGFRXX' => 58,
        'KJCYZGXX' => 59,
        'LSZYZGZXX' => 60,
        'QJYXXSQJYXXSGBXX' => 61,
        'SFJDJGCYRYZGXX' => 62,
        'SHJZCYXX' => 63,
        'SHJZRYXX' => 64,
        'TDGJSXX' => 65,
        'WSZYJSZGKSWJXX' => 66,
        'XSZZGLXX' => 67,
        'ZCKJSXX' => 68,
        'ZFBZSQRXX' => 69,
        'QYHYSJ' => 70,
        'XZJCXX'=>71,
        'XZQZXX'=>72,
        'FRHEIMD'=>73,
        'FRHONGMD'=>74,
        //@position_type_73
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['QYHYSJ']
        ),
        IUserGroup::ID['QFZGGW'] => array(
            self::TYPE['TEST'],
            self::TYPE['TJQYFRGGXYZHPJJG'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRHONGMD']
        ),
        IUserGroup::ID['TJSXQQFSTDHYFWZX'] => array(),
        IUserGroup::ID['QSJJ'] => array(),
        IUserGroup::ID['QZFBGS'] => array(),
        IUserGroup::ID['QJYJ'] => array(
            self::TYPE['XSZZGLXX'],
            self::TYPE['QJYXXSQJYXXSGBXX'],
            self::TYPE['JYJGFRXX'],
            self::TYPE['JSZGXX'],
            self::TYPE['JSGRRYXX']
        ),
        IUserGroup::ID['GAXQFJ'] => array(
            self::TYPE['BWMXWCFJLGAJ'],
            self::TYPE['BWMXWCFJLGAJJT']
        ),
        IUserGroup::ID['QWJW'] => array(
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['JTYS'],
            self::TYPE['JFDXJBXX'],
            self::TYPE['HSZYZGZXX']
        ),
        IUserGroup::ID['XYMJ'] => array(),
        IUserGroup::ID['JWZ'] => array(),
        IUserGroup::ID['QRSJ'] => array(),
        IUserGroup::ID['QTJJ'] => array(),
        IUserGroup::ID['QGXJ'] => array(),
        IUserGroup::ID['QGZW'] => array(),
        IUserGroup::ID['TJSXQQHTYSFWB'] => array(),
        IUserGroup::ID['TJSXQQWKHYZ'] => array(),
        IUserGroup::ID['LQZJ'] => array(),
        IUserGroup::ID['QYJJ'] => array(),
        IUserGroup::ID['TJXQQCMXXJSYXGS'] => array(),
        IUserGroup::ID['QCZJ'] => array(
            self::TYPE['ZCKJSXX'],
            self::TYPE['KJCYZGXX']
        ),
        IUserGroup::ID['DSZ'] => array(),
        IUserGroup::ID['TJSXQQSSSZWHYYCBS'] => array(),
        IUserGroup::ID['QRMTZX'] => array(),
        IUserGroup::ID['XKZ'] => array(),
        IUserGroup::ID['QSWUJ'] => array(),
        IUserGroup::ID['QFZB'] => array(),
        IUserGroup::ID['QWLJ'] => array(
            self::TYPE['BWMXWCFJLQWLJWMLY']
        ),
        IUserGroup::ID['QRFB'] => array(),
        IUserGroup::ID['QSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JCFLYZRYXX'],
            self::TYPE['GZYXX']
        ),
        IUserGroup::ID['TJSXQQYFNYJSFWZX'] => array(),
        IUserGroup::ID['QXFB'] => array(),
        IUserGroup::ID['QNYNCW'] => array(),
        IUserGroup::ID['ZBZ'] => array(),
        IUserGroup::ID['QGTZYFJ'] => array(),
        IUserGroup::ID['ZJWZ'] => array(
            self::TYPE['BWMXWCFJLZJWZ']
        ),
        IUserGroup::ID['QZF'] => array(),
        IUserGroup::ID['YLQZ'] => array(),
        IUserGroup::ID['WWZZ'] => array(),
        IUserGroup::ID['XQQXMSCZX'] => array(),
        IUserGroup::ID['XQQNZBGS'] => array(),
        IUserGroup::ID['QSHWJ'] => array(),
        IUserGroup::ID['QSCJGJ'] => array(
            self::TYPE['BWMXWCFJLZJJWMJY'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QIYEJBXX']
        ),
        IUserGroup::ID['ZGNYYHGFYXGSTJYLQZH'] => array(),
        IUserGroup::ID['GJJXQFZX'] => array(),
        IUserGroup::ID['XQQKFQZGS'] => array(),
        IUserGroup::ID['QZSJ'] => array(),
        IUserGroup::ID['QCL'] => array(),
        IUserGroup::ID['QMZJ'] => array(
            self::TYPE['SHJZRYXX'],
            self::TYPE['SHJZCYXX'],
            self::TYPE['BWMXWCFJLMZJWMBZ']
        ),
        IUserGroup::ID['QQXJ'] => array(),
        IUserGroup::ID['QSWJ'] => array(),
        IUserGroup::ID['CXDLGS'] => array(),
        IUserGroup::ID['XQQZHZFJ'] => array(),
        IUserGroup::ID['GHHZRZYFJ'] => array(),
        IUserGroup::ID['SXXQFZX'] => array(),
        IUserGroup::ID['QJRJ'] => array(),
        IUserGroup::ID['QZFJ'] => array(),
        IUserGroup::ID['TJSGAJTGLJXQZD'] => array(),
        IUserGroup::ID['QRMFY'] => array(self::TYPE['FRJQTZZSXFB'], self::TYPE['ZRRSXFB']),
        IUserGroup::ID['QWBGS'] => array(),
        IUserGroup::ID['QWZZB'] => array(self::TYPE['GWYXX']),
        IUserGroup::ID['QWXCB'] => array(),
        IUserGroup::ID['QWZFW'] => array(),
        IUserGroup::ID['QWZB'] => array(),
        IUserGroup::ID['QRMJCY'] => array(),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['QWBB'] => array(),
        IUserGroup::ID['TQW'] => array(),
        IUserGroup::ID['QGSL'] => array(),
        IUserGroup::ID['QKJJ'] => array(),
        IUserGroup::ID['QZJW'] => array(self::TYPE['ZFBZSQRXX'], self::TYPE['TDGJSXX']),
        IUserGroup::ID['QSTHJJ'] => array(),
        IUserGroup::ID['QCGW'] => array(),
        IUserGroup::ID['QYGJ'] => array(),
        IUserGroup::ID['QZWFWB'] => array(),
        IUserGroup::ID['QTYJ'] => array(),
        IUserGroup::ID['QYBJ'] => array(),
        IUserGroup::ID['QXTB'] => array(),
        IUserGroup::ID['XQQXZSPJ'] => array(),
        IUserGroup::ID['XQQWHHLYJ'] => array(),
        IUserGroup::ID['XQQXFJYZD'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX'],),
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}

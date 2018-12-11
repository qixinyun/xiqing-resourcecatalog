<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['FRJQTZZSXFB'] => '法人及其他组织失信发布',
        IResourceCatalog::TYPE['ZRRSXFB'] => '自然人失信发布',
        IResourceCatalog::TYPE['XZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
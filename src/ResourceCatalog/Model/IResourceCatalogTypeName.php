<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['FRJQTZZSXFB'] => '法人及其他组织失信发布',
        IResourceCatalog::TYPE['ZRRSXFB'] => '自然人失信发布',
        IResourceCatalog::TYPE['BWMXWCFJLGAJ'] => '不文明行为处罚记录(公共场所)',
        IResourceCatalog::TYPE['BWMXWCFJLZJWZ'] => '不文明行为处罚记录(社区生活)',
        IResourceCatalog::TYPE['BWMXWCFJLGAJJT'] => '不文明行为处罚记录(交通出行)',
        IResourceCatalog::TYPE['BWMXWCFJLMZJWMBZ'] => '不文明行为处罚记录(文明殡葬祭扫)',
        IResourceCatalog::TYPE['BWMXWCFJLZJJWMJY'] => '不文明行为处罚记录(文明经营)',
        IResourceCatalog::TYPE['BWMXWCFJLQWLJWMLY'] => '不文明行为处罚记录(文明旅游)',
        IResourceCatalog::TYPE['TJQYFRGGXYZHPJJG'] => '天津企业法人公共信用综合评价结果',  
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['QIYEJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['XZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
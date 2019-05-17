<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{   
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRJQTZZSXFB'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['ZRRSXFB'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['BWMXWCFJLGAJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['BWMXWCFJLZJWZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['BWMXWCFJLGAJJT'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['BWMXWCFJLMZJWMBZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['BWMXWCFJLZJJWMJYLY'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['BWMXWCFJLQWLJWMJYLY'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZCF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZXK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL']
    );
}
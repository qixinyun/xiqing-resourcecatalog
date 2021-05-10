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
        IResourceCatalog::TYPE['XBXZCF'] => '2019行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '2019行政许可公示信息',
        
        IResourceCatalog::TYPE['XZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录',
        IResourceCatalog::TYPE['GWYXX'] => '公务员信息',
        IResourceCatalog::TYPE['GZYXX'] => '公证员信息',
        IResourceCatalog::TYPE['HSZYZGZXX'] => '护士执业资格证信息',
        IResourceCatalog::TYPE['JCFLYZRYXX'] => '基层法律援助人员信息',
        IResourceCatalog::TYPE['JFDXJBXX'] => '奖扶对象基本信息',
        IResourceCatalog::TYPE['JSGRRYXX'] => '教师个人荣誉信息',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['JTYS'] => '家庭医生',
        IResourceCatalog::TYPE['JYJGFRXX'] => '教育机构法人信息',
        IResourceCatalog::TYPE['KJCYZGXX'] => '会计从业资格信息',
        IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['QJYXXSQJYXXSGBXX'] => '区级优秀学生，区级优秀学生干部信息',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['SHJZCYXX'] => '社会救助成员信息',
        IResourceCatalog::TYPE['SHJZRYXX'] => '社会救助人员信息',
        IResourceCatalog::TYPE['TDGJSXX'] => '土地估价师信息',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => '卫生专业技术资格考试违纪信息',
        IResourceCatalog::TYPE['XSZZGLXX'] => '学生资助管理信息',
        IResourceCatalog::TYPE['ZCKJSXX'] => '注册会计师信息',
        IResourceCatalog::TYPE['ZFBZSQRXX'] => '住房保障申请人信息',
        IResourceCatalog::TYPE['QYHYSJ'] => '企业行业数据',
        IResourceCatalog::TYPE['XZJCXX'] => '行政检查信息',
        IResourceCatalog::TYPE['XZQZXX'] => '行政强制信息',

        IResourceCatalog::TYPE['FRHEIMD'] => '法人黑名单',
        IResourceCatalog::TYPE['FRHONGMD'] => '法人红名单',
        //@position
    );
}

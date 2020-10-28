<?php
namespace ResourceCatalog\Model;

interface IUserGroupIdentify
{
    const IDENTIFY = array(
        IUserGroup::ID['NULL'] => 'NULL',
        IUserGroup::ID['FGW'] => 'FGW',
        IUserGroup::ID['GAJ'] => 'GAJ',
        IUserGroup::ID['XZSPJ'] => 'XZSPJ',
        IUserGroup::ID['QWLJ'] => 'QWLJ',
        IUserGroup::ID['GTJ'] => 'GTJ',
        IUserGroup::ID['ZJWZ'] => 'ZJWZ',
        IUserGroup::ID['ZJJ'] => 'ZJJ',
        IUserGroup::ID['MZJ'] => 'MZJ',
        IUserGroup::ID['XQZD'] => 'XQZD',
        IUserGroup::ID['RMFY'] => 'RMFY',
    );
}

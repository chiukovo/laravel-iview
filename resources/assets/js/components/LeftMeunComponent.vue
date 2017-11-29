<style type="text/css">
    .inlineA {
        color: rgba(255,255,255,.7);
        display: block;
    }
</style>
<template>
    <Col span="6">
        <Menu :theme="theme2" :open-names="['']" accordion>
            <Submenu name="1">
                <template slot="title">
                    <Icon type="ios-paper"></Icon>
                    内容管理
                </template>
                <MenuItem name="1-1"><a class="inlineA" href="/welcome">welcome</a></MenuItem>
                <MenuItem name="1-2"><a class="inlineA" href="/">index</a></MenuItem>
                <MenuItem name="1-3"><a class="inlineA" href="/login">login</a></MenuItem>
            </Submenu>
            <Submenu name="2">
                <template slot="title">
                    <Icon type="ios-people"></Icon>
                    用户管理
                </template>
                <MenuItem name="2-1">新增用户</MenuItem>
                <MenuItem name="2-2">活跃用户</MenuItem>
            </Submenu>
            <Submenu name="3">
                <template slot="title">
                    <Icon type="stats-bars"></Icon>
                    统计分析
                </template>
                <MenuGroup title="使用">
                    <MenuItem name="3-1">新增和启动</MenuItem>
                    <MenuItem name="3-2">活跃分析</MenuItem>
                    <MenuItem name="3-3">时段分析</MenuItem>
                </MenuGroup>
                <MenuGroup title="留存">
                    <MenuItem name="3-4">用户留存</MenuItem>
                    <MenuItem name="3-5">流失用户</MenuItem>
                </MenuGroup>
            </Submenu>
        </Menu>
    </Col>
</template>
<script>
    export default {
        data () {
            return {
                theme2: 'dark'
            }
        }
    }
</script>

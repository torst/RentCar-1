<!DOCTYPE html>
<html>
{include 'head.tpl'}
<body>
{include 'nav.tpl'}
{capture name=content}
    {include file='locations/index.tpl'}
{/capture}
{include 'container.tpl'}
</body>
</html>
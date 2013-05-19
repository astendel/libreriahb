<!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="block products_block">
	{include file=$tpl_dir./binding_top.tpl}
                    <h4>{l s='featured products' mod='homefeatured'}</h4>
                    {if isset($products) AND $products}
                        <div class="block_content">
                            {assign var='liHeight' value=342}
                            {assign var='nbItemsPerLine' value=3}
                            {assign var='nbLi' value=$products|@count}
                            {assign var='nbLines' value=$nbLi/$nbItemsPerLine|ceil}
                            {assign var='ulHeight' value=$nbLines*$liHeight}
                            <ul>
                            {foreach from=$products item=product name=homeFeaturedProducts}
                                <li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1}clear{/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - ($smarty.foreach.homeFeaturedProducts.total % $nbItemsPerLine))}last_line{/if}">
                                    <a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home')}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
                                    <h5><a href="{$product.link}" title="{$product.name|truncate:32:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:27:'...'|escape:'htmlall':'UTF-8'}</a></h5>
                                </li>
                            {/foreach}
                            </ul>
                        </div>
                    {else}
                        <p>{l s='No featured products' mod='homefeatured'}</p>
                    {/if}
                   {include file=$tpl_dir./binding_bottom.tpl}
</div>
<!-- /MODULE Home Featured Products -->
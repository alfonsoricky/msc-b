<div class="col col-md-3 col-xs-4">
	<div class="product-container product-card">
		<form id="favorite-product-{{ product.id }}" data-request="onSetFavorite" data-request-flash>
			{% partial '@favorite' product=product %}
		</form>

		<div class="card-status-label">
			{% if product.is_on_sale %}
				<span class="label label-success">{{ 'pixel.shop::lang.frontend.onsale'|trans }}</span>
			{% endif %}

			{% if product.quantity < 1 and product.quantity != null %}
				<span class="label label-danger">{{ 'pixel.shop::lang.frontend.soldout'|trans }}</span>
			{% endif %}
		</div>

		<div class="card-block card-actions">
			{% if product.image %}
			<a href="{{ product.url }}">
				<img class="card-img-top img-responsive" src="{{ product.image.thumb(500,500,'crop') }}" alt="">
            </a>
			{% endif %}

			<div class="card-body vertical-align">
				<div class="vertical-wrap">
					{% if product.brand.name %}
						<span class="label label-default shop__product-brand">{{ product.brand.name }}</span>
					{% endif %}

					<h4 class="card-title shop__product-title">
						{{ str_limit( product.name, 48,'...')  }}
					</h4>
					<h3 class="card-price shop__product-price">
						{{ product.getPrice()|currency }}
					</h3>
					{% if product.is_on_sale %}
					<small class="shop__product-old-price">
						<strike class="text-danger">{{ product.getOldPrice()|currency }}</strike>
					</small>
					{% endif %}

					{% if product.categories|length > 0 %}
					<p><small><i class="fas fa-tag"></i> {{ product.categories.lists('name')|join(', ') }}</small></p>
					{% endif %}

					{% if product.short_description %}
						<p class="shop__product-short-description">{{ str_limit( product.short_description, 120,'...')|nl2br  }}</p>
					{% endif %}
				</div>
			</div>

			{% if product.quantity > 0 or product.quantity == null %}
			<form data-request="onAddToCart" data-request-flash data-request-success="CartButton.onSuccess(data)">
				{% if showQuickAdd %}
				{% if product.is_with_variants and product.variants|length > 0 %}
				<a href="{{ product.url }}" class="btn btn-primary btn-block btn-footer">
					<span class="fas fa-info-circle" aria-hidden="true"></span> 
					{{ 'pixel.shop::lang.frontend.moreinfo'|trans }}
				</a>
				{% else %}
				<input type="hidden" name="id" value="{{ product.id }}">
				<input type="hidden" name="price" value="{{ product.price }}">
				<input type="hidden" name="quantity" value="1">
				<button type="submit" class="btn btn-primary btn-block btn-footer" data-attach-loading>
					<span class="fas fa-shopping-cart" aria-hidden="true"></span> 
					{{ 'pixel.shop::lang.frontend.addtocart'|trans }}
				</button>
				{% endif %}

				{% else %}
				<a href="{{ product.url }}" class="btn btn-primary btn-block btn-footer">
					<span class="fas fa-info-circle" aria-hidden="true"></span> 
					{{ 'pixel.shop::lang.frontend.moreinfo'|trans }}
				</a>
				{% endif %}
			</form>
			{% else %}
			<a href="{{ product.url }}" class="btn btn-warning btn-block btn-footer">
				<span class="fas fa-plus-circle" aria-hidden="true"></span> 
				{{ 'pixel.shop::lang.frontend.order_reserve'|trans }}
			</a>
			{% endif %}
		</div>


	</div>
</div>
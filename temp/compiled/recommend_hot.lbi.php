<?php if ($this->_var['hot_goods']): ?>
<div class="tabs-panel sale-goods-list tabs-hide">
  <ul>
    <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_19664900_1546666990');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_19664900_1546666990']):
        $this->_foreach['index_goods']['iteration']++;
?> 
    <?php if ($this->_foreach['index_goods']['iteration'] < 6): ?>
    <li>
      <dl>
        <dt class="goods-name"> <a target="_blank" href="<?php echo $this->_var['goods_0_19664900_1546666990']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_19664900_1546666990']['name']); ?>"><?php echo $this->_var['goods_0_19664900_1546666990']['short_name']; ?></a> </dt>
        <dd class="goods-thumb"> <a target="_blank" href="<?php echo $this->_var['goods_0_19664900_1546666990']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_19664900_1546666990']['name']); ?>"> <img data-original="<?php echo $this->_var['goods_0_19664900_1546666990']['thumb']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif" alt="<?php echo htmlspecialchars($this->_var['goods_0_19664900_1546666990']['name']); ?>"> </a> </dd>
        <dd class="goods-price"> 商城价： <em> 
          <?php if ($this->_var['goods_0_19664900_1546666990']['promote_price'] != ""): ?> 
          <?php echo $this->_var['goods_0_19664900_1546666990']['promote_price']; ?> 
          <?php else: ?> 
          <?php echo $this->_var['goods_0_19664900_1546666990']['shop_price']; ?> 
          <?php endif; ?> 
          </em> </dd>
      </dl>
    </li>
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<?php endif; ?> 

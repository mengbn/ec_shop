<?php if ($this->_var['fittings']): ?>
<div  class="aside-con related">
	<div class="aside-tit">
          <h2><?php echo $this->_var['lang']['accessories_releate']; ?></h2>
    </div>
  	<div class="aside-list">
        <ul>
          <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_22311400_1546667011');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_22311400_1546667011']):
        $this->_foreach['goods']['iteration']++;
?> 
          <li class="fore <?php if (($this->_foreach['goods']['iteration'] <= 1)): ?>fore1<?php endif; ?>">
          <div class="p-img"><a href="<?php echo $this->_var['goods_0_22311400_1546667011']['url']; ?>"><img width="100" height="100" alt="<?php echo $this->_var['goods_0_22311400_1546667011']['name']; ?>"  src="<?php echo $this->_var['goods_0_22311400_1546667011']['goods_thumb']; ?>"/></a></div>
          <div class="rate"><a href="<?php echo $this->_var['goods_0_22311400_1546667011']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_22311400_1546667011']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_22311400_1546667011']['goods_name']); ?></a></div>
          <div class="p-price"><strong class="main-color"> <?php echo $this->_var['goods_0_22311400_1546667011']['fittings_price']; ?> </strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
  	</div>
</div>
<?php endif; ?> 
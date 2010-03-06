
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>
<div id="sixContainer" style="position:relative">
<table cellspacing="0" cellpadding="0" summary="Image gallery">
<tbody>
<tr class="row_0 row_first">
  <td class="col_0 col_first" style="width:<?php echo $this->colWidth; ?>px"><div class="image_container"><img src="<?php echo $this->images[1]['src']; ?>"<?php echo $this->images[1]['imgSize']; ?> alt="<?php echo $this->images[1]['alt']; ?>" onmouseover="SixImages.zoom(this, '<?php echo $this->images[1]['link']; ?>', <?php echo $this->images[1]['width']; ?>, <?php echo $this->images[1]['height']; ?>, 'right', 'top')" /></div></td>
  <td class="col_1" style="width:<?php echo $this->borderX; ?>px">&nbsp;</td>
  <td class="col_2" style="width:<?php echo $this->colWidth; ?>px"><div class="image_container"><img src="<?php echo $this->images[2]['src']; ?>"<?php echo $this->images[2]['imgSize']; ?> alt="<?php echo $this->images[2]['alt']; ?>" onmouseover="SixImages.zoom(this, '<?php echo $this->images[2]['link']; ?>', <?php echo $this->images[2]['width']; ?>, <?php echo $this->images[2]['height']; ?>, '<?php echo $this->zoom; ?>', 'top')" /></div></td>
  <td class="col_3" style="width:<?php echo $this->borderX; ?>px">&nbsp;</td>
  <td class="col_4 col_last" style="width:<?php echo $this->colWidth; ?>px"><div class="image_container"><img src="<?php echo $this->images[3]['src']; ?>"<?php echo $this->images[3]['imgSize']; ?> alt="<?php echo $this->images[3]['alt']; ?>" onmouseover="SixImages.zoom(this, '<?php echo $this->images[3]['link']; ?>', <?php echo $this->images[3]['width']; ?>, <?php echo $this->images[3]['height']; ?>, 'left', 'top')" /></div></td>
</tr>
<tr class="row_1">
	<td colspan="5" style="height:<?php echo $this->borderY; ?>px">&nbsp;</td>
</tr>
<tr class="row_0 row_first">
  <td class="col_0 col_first" style="width:<?php echo $this->colWidth; ?>px"><div class="image_container"><img src="<?php echo $this->images[4]['src']; ?>"<?php echo $this->images[4]['imgSize']; ?> alt="<?php echo $this->images[4]['alt']; ?>" onmouseover="SixImages.zoom(this, '<?php echo $this->images[4]['link']; ?>', <?php echo $this->images[4]['width']; ?>, <?php echo $this->images[4]['height']; ?>, 'right', 'bottom')" /></div></td>
  <td class="col_1" style="width:<?php echo $this->borderX; ?>px">&nbsp;</td>
  <td class="col_2" style="width:<?php echo $this->colWidth; ?>px"><div class="image_container"><img src="<?php echo $this->images[5]['src']; ?>"<?php echo $this->images[5]['imgSize']; ?> alt="<?php echo $this->images[5]['alt']; ?>" onmouseover="SixImages.zoom(this, '<?php echo $this->images[5]['link']; ?>', <?php echo $this->images[5]['width']; ?>, <?php echo $this->images[5]['height']; ?>, '<?php echo $this->zoom; ?>', 'bottom')" /></div></td>
  <td class="col_3" style="width:<?php echo $this->borderX; ?>px">&nbsp;</td>
  <td class="col_4 col_last" style="width:<?php echo $this->colWidth; ?>px"><div class="image_container"><img src="<?php echo $this->images[6]['src']; ?>"<?php echo $this->images[6]['imgSize']; ?> alt="<?php echo $this->images[6]['alt']; ?>" onmouseover="SixImages.zoom(this, '<?php echo $this->images[6]['link']; ?>', <?php echo $this->images[6]['width']; ?>, <?php echo $this->images[6]['height']; ?>, 'left', 'bottom')" /></div></td>
</tr>
</tbody>
</table><img id="sixOverlay" style="display: none; position: absolute" /></div>
</div>

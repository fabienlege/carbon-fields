<table class="eecf-contaienr <?php echo $container_tag_class_name ?>">
	<?php 
	$index = 0;
	foreach ($this->values as $fields): ?>
		<tr>
			<td>
				<table>
					<?php foreach ($fields as $field): 
						$field->set_name( $this->get_name() . '[' . $index . '][' . $field->get_name() . ']' );
					?>
						<tr>
							<td>
								<?php echo $field->render(); ?>
							</td>
						</tr>
					<?php endforeach ?>
				</table>
				<a href="#" onclick="javascript:jQuery(this).parent().remove(); return false;">Remove</a>
			</td>
		</tr>
	<?php $index ++; endforeach ?>

	<!-- New Group -->

	<select name="<?php echo $this->get_name() . '[' . $index . '][group]' ?>">
		<?php foreach ($this->groups as $group): ?>
			<option value="<?php echo $group->get_name() ?>"><?php echo $group->get_label() ?></option>
		<?php endforeach; ?>
	</select>

	<?php foreach ($this->groups as $group): ?>
		<tr>
			<td>
				<strong>Group <?php echo $group->get_label() ?></strong>
				<table>
					<?php 
					$fields = $group->get_fields();
					foreach ($fields as $field): 
						$field->set_name( $this->get_name() . '[' . $index . '][' . $field->get_name() . ']' );
					?>
						<tr>
							<td>
								<?php echo $field->render(); ?>
							</td>
						</tr>
					<?php endforeach ?>
				</table>
				<a href="#" onclick="javascript:jQuery(this).parent().remove(); return false;">Remove</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
/* global Vue */

import { fieldHandler } from '../fieldHandler';

Vue.component( 'repeater-sub-field', {
	template:
	`<div>
		<tr class="row"><td class="handle"><span class="handle-index">{{keyIndex + 1}}</span></td>
			<template v-for="( subfield, index ) in field">
				<td :class="'subfield ' + subfield.name">
					<div class="row-field">
						<label
							v-if="subfield.checkbox_label"
						>
						<input
						:id="subfield.id"
						:class="subfield.css_class"
						:type="subfield.type"
						:value="subfield.value"
						:checked="subfield.checked"
						:name="'notification_carrier_' + type.fieldCarrier + '[' + type.fieldType + ']' + '[' + rowIndex + ']' + '[' + rowName + ']' + '[' + keyIndex + ']' "
						@click="checkboxHandler( subfield, $event )">
						{{ subfield.checkbox_label }}
						</label>
						<template
						v-else-if="subfield.type === 'repeater'"
						>
						<nested-sub-field
						:model="nestedModel"
						:nested-fields="nestedFields"
						:sub-rows="subRows"
						:type="type"
						@add-nested-field="addSubField">
						</nested-sub-field>
						</template>
						<input
						v-else
						:id="subfield.id"
						:class="subfield.css_class"
						type="text"
						:value="subfield.value"
						:name="'notification_carrier_' + type.fieldCarrier + '[' + type.fieldType + ']' + '[' + rowIndex + ']' + '[' + rowName + ']' + '[' + keyIndex + ']' + '[' + subfield.name + ']' "
						:placeholder="subfield.placeholder"
						>
						<small
							v-if="subfield.description"
							class="description">
							{{subfield.description}}
						</small>
					</div>
				</td>
				</template>
			<td class="trash" @click="removeSubfield(keyIndex)"></td>
		</tr>
	</div>
	`,
	props: ['field', 'type', 'keyIndex', 'row', 'rowIndex', 'rowName'],
	mixins: [fieldHandler],
	methods: {
		removeSubfield( index ){
			this.$emit('sub-field-removed', index );
		}
	}
} )

/* global notification */

export const inputsHandler = {
	methods: {
		checkboxHandler( checkbox, e ){
			const checkboxInput = e.target;

			checkbox.value = !checkbox.value;
			if( ! checkbox.value ) {
				checkbox.checked = '';
				checkboxInput.setAttribute( 'checked', '' );
				checkboxInput.setAttribute( 'value', 0 );

			} else {
				checkbox.checked = 'checked';
				checkboxInput.setAttribute( 'checked', 'checked' );
				checkboxInput.setAttribute( 'value', 1 );
			}
		},
		handleSelect( value, data ){
			if( value === data ){
				return true;
			}
		},
		selectChange( field, row, e ){
			const recipientTypeField = row[1];

			if( field === recipientTypeField ){
				return;
			}

			if( e ){
				field.value = e.target.value;
			}

			if( !field.value ){
				field.value = row[0].value;
			}

			const payload = {
				action: 'get_recipient_input',
				type: field.value,
				carrier: this._data.type.fieldCarrier,
			}

			let data = [];

			for( const property in payload ){
				const encodedKey = encodeURIComponent( property );
				const encodedValue = encodeURIComponent( payload[ property ] );
				data.push( encodedKey + '=' + encodedValue );
			}

			data = data.join('&');

			fetch( notification.ajaxurl, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
				},
				body: data
			})
			.then( res => res.json() )
			.then( response => {
				// eslint-disable-next-line no-shadow
				const data = response.data;

				recipientTypeField.options = data.options;
				recipientTypeField.placeholder = data.placeholder;
				recipientTypeField.description = data.description;
				recipientTypeField.type = data.type;
				recipientTypeField.id = data.id;
				if( e ){
					recipientTypeField.value = '';
				}
			} )
		}
	}
}

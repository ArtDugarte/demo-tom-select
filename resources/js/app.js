import './bootstrap';
import 'tom-select/dist/css/tom-select.bootstrap5.css';
import TomSelect from 'tom-select';


const tomSelect = document.querySelectorAll('#tomSelect');

tomSelect.forEach(select => {
    new TomSelect(select, {
        create: false,
        sortField: {
            field: "text",
            direction: "asc"
        }
    })
})

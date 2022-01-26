import { registerBlockType } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";

// Register the block
registerBlockType("aquila-blocks/heading", {
    title: __("Heading with Icon", "aquila"),
    icon: 'admin-customizer',
    description: __('Add heading and select icon', 'aquila'),
    category: 'aquila',
  edit(){
    return <p> Hello world (from the editor)</p>;
  },
  save() {
    return <p> Hola mundo (from the frontend) </p>;
  },
});

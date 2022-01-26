import { registerBlockType } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";
import { InnerBlocks } from "@wordpress/block-editor";
import Edit from "./edit";


// Register the block
registerBlockType("aquila-blocks/dos-and-donts", {
  title: __("Dos and dont\'s", "aquila"),
  icon: "editor-table",
  description: __("Add heading and select text", "aquila"),
  category: "aquila",
  edit: Edit,
  save({ attributes: { option, content } }) {
    
    return (
      <div className="aquila-dos-and-donts">
        <InnerBlocks.Content/>
      </div>
    );
  },
});

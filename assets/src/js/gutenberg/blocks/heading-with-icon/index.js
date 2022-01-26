import { registerBlockType } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";
import { RichText } from "@wordpress/block-editor";
import Edit from "./edit";
import { getIconComponent } from "./icons-map";

// Register the block
registerBlockType("aquila-blocks/heading", {
  title: __("Heading with Icon", "aquila"),
  icon: "admin-customizer",
  description: __("Add heading and select icon", "aquila"),
  category: "aquila",
  attributes: {
    option: {
      type: "string",
      default: "dos",
    },
    content: {
      type: "string",
      source: "html",
      selector: "h4",
      default: __("Dos", "aquila"),
    },
  },
  edit: Edit,
  save({ attributes: { option, content } }) {
    const HeadingIcon = getIconComponent(option);
    return (
      <div className="aquila-icon-heading">
        <span className="aquila-icon-heading__heading">
          <HeadingIcon />
        </span>
        <RichText.Content tagName="h4" value={content} />
      </div>
    );
  },
});

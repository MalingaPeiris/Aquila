import { InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import { blockColumns } from "./templates";

const ALLOWED_BLOCKS = ["core/group"];
const INNER_BLOCK_TEMPLATE = [
  [
    "core/group",
    {
      className: "aquila-dos-and-donts__group",
      backgroundColor: "cyan-bluish-gray",
    },
    blockColumns
  ],
];

const Edit = () => {
  return (
    <div className="aquila-dos-and-donts">
      <InnerBlocks
        allowedBlocks={ALLOWED_BLOCKS}
        template={INNER_BLOCK_TEMPLATE}
        templateLock={true}
      />
    </div>
  );
};

export default Edit;

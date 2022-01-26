import { RichText, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, RadioControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";
import { getIconComponent } from "./icons-map";

const Edit = ({ className, attributes, setAttributes }) => {
  const { option, content } = attributes;

  const HeadingIcon = getIconComponent(option);

  return (
    <div className="aquila-icon-heading">
      <span className="aquila-icon-heading__heading">
        <HeadingIcon />
      </span>
      <RichText
        tagName="h4"
        className={className}
        value={content}
        onChange={(content) => setAttributes({ content })}
        placeholder={__("Heading...", "aquila")}
      />
      <InspectorControls>
        <PanelBody title={__("Block Settings", "aquila")}>
          <RadioControl
            label={__("Select the icon", "aquila")}
            help={__("Control icons selections", "aquila")}
            selected={option}
            options={[
              { label: __("Dos", "aquila"), value: "dos" },
              { label: __("Dos's", "aquila"), value: "donts" },
            ]}
            onChange={(option) => {
              setAttributes({ option });
            }}
          />
        </PanelBody>
      </InspectorControls>
    </div>
  );
};

export default Edit;

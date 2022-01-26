import { RichText } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

const Edit = ({ className, attributes, setAttributes }) => {
    const { content } = attributes;
    
    console.warn('edit', content);

  return (
    <div className="aquila-icon-heading">
      <span className="aquila-icon-heading__heading" />
      <RichText
        tagName="h4"
        className={className}
        value={content}
        onChange={(content) => setAttributes({ content })}
        placeholder={__("Heading...", "aquila")}
      />
    </div>
  );
};

export default Edit;

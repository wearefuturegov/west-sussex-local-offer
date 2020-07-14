const { registerBlockType, PlainText } = window.wp.blocks

registerBlockType( "lo/tree-menu", {
    title: "Tree menu",
    category: "common",
    attributes: {
        menuId: {
            type: "string"
        }
    },
 
    edit: ({ attributes: { menuId }, className, setAttributes }) => 
        <div className={className}>
            <h2>Tree menu</h2>
            {/* <PlainText
                value={menuId} 
                onChange={value => setAttributes({menuId: value})} 
                placeholder="Menu ID..."
            /> */}
        </div>
    ,
 
    save: () => null
})
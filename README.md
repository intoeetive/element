# Element Variable for Craft CMS

Access any element from templates.

Accepts 2 parameters:
first is element type (e.g. 'MatrixBlock', 'Asset', 'Entry', 'Commerce_Variant')
second is array of criterias to fetch the element (anything supported by ElementCriteriaModel)

Example usage: 
`{{ craft.element.get('MatrixBlock', {'type': 'video'}).first().url }}`
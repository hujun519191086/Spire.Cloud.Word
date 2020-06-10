import spirecloudword
from spirecloudword import *

appId = "your id"
appKey = "your key"
baseUrl = "https://api.e-iceblue.cn"
configuration = Configuration(appId, appKey, baseUrl)
api = spirecloudword.api.fields_api.FieldsApi(configuration)

file_name = "Template.docx"
paragraph_path_2 = "sections/0/paragraphs/1"
filed_code_2 = "IF 1 > 2 True False"
extra_add2 = {
    'folder': 'input',
    'index_in_paragraph': 0,
    'dest_file_path': 'output/AddIfField.docx'}
result = api.add_field(file_name, paragraph_path_2, filed_code_2, **extra_add2)






import spirecloudword
from spirecloudword.configuration import *

appId = "your id"
appKey = "your key"
baseUrl = "https://api.e-iceblue.cn"
configuration = Configuration(appId, appKey,baseUrl)
api= spirecloudword.api.TablesApi(configuration)

file_name = 'Table.docx'
index = 0
node_path = 'Section/0/Body/0'
extra = {'folder': "input", 'dest_file_path': 'output/DeleteTable.docx'}
result = api.delete_table(file_name, node_path, index, **extra)
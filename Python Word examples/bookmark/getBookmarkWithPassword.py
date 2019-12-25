import spirecloudword
from spirecloudword.configuration import Configuration as WordConfiguration

appId = "your id"
appKey = "your key"

configuration = WordConfiguration(appId, appKey)
api = spirecloudword.api.bookmarks_api.BookmarksApi(configuration)

file_name = "GetBookmarkWithPassword.docx"
bookmark_name = "bookmarkName"
content = api.get_bookmark_content(file_name, bookmark_name, folder="input", password="123")




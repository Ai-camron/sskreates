import unittest
from html.parser import HTMLParser

class PageParser(HTMLParser):
    def __init__(self):
        super().__init__()
        self.lang = None
        self.header = False
        self.main = False
        self.footer = False
        self.titles = []
        self.login_links = []
        self.styles = []
        self.dialog = False
        self.in_title = False
    def handle_starttag(self, tag, attrs):
        attrs = dict(attrs)
        if tag == 'html':
            self.lang = attrs.get('lang')
        if tag == 'header':
            self.header = True
        if tag == 'main':
            self.main = True
        if tag == 'footer':
            self.footer = True
        if tag == 'title':
            self.in_title = True
        if tag == 'a' and 'data-login' in attrs:
            self.login_links.append(attrs.get('href'))
        if tag == 'link' and attrs.get('rel') == 'stylesheet':
            self.styles.append(attrs.get('href'))
        if tag == 'dialog' and attrs.get('id') == 'loginModal':
            self.dialog = True
    def handle_endtag(self, tag):
        if tag == 'title':
            self.in_title = False
    def handle_data(self, data):
        if self.in_title:
            self.titles.append(data.strip())

PAGES = [
    'index.html','shop.html','challenges.html','lookbook.html',
    'about.html','tools.html','contact.html','account.html'
]

class TestPages(unittest.TestCase):
    def test_structure(self):
        for page in PAGES:
            with self.subTest(page=page):
                parser = PageParser()
                with open(page, encoding='utf-8') as f:
                    parser.feed(f.read())
                self.assertEqual(parser.lang, 'en')
                self.assertTrue(parser.header)
                self.assertTrue(parser.main)
                self.assertTrue(parser.footer)
                self.assertTrue(parser.titles)
                self.assertTrue(parser.login_links)
                self.assertIn('css/style.css', parser.styles)
                self.assertTrue(parser.dialog)

if __name__ == '__main__':
    unittest.main()

import unittest
from pathlib import Path


REPO_ROOT = Path(__file__).resolve().parents[1]
SECURITY_FILE = REPO_ROOT / "SECURITY.md"


class TestSecurityPolicy(unittest.TestCase):
    def test_security_policy_file_exists(self):
        self.assertTrue(
            SECURITY_FILE.is_file(),
            "SECURITY.md should exist at the repository root.",
        )

    def test_supported_versions_table(self):
        content = SECURITY_FILE.read_text(encoding="utf-8")
        self.assertIn("## Supported Versions", content)
        self.assertIn("| Version | Supported", content)
        for row in [
            "| 5.1.x   | :white_check_mark: |",
            "| 5.0.x   | :x:                |",
            "| 4.0.x   | :white_check_mark: |",
            "| < 4.0   | :x:                |",
        ]:
            with self.subTest(row=row):
                self.assertIn(row, content)

    def test_reporting_section_guidance(self):
        content = SECURITY_FILE.read_text(encoding="utf-8")
        self.assertIn("## Reporting a Vulnerability", content)
        self.assertIn(
            "Tell them where to go, how often they can expect to get an update",
            content,
        )


if __name__ == "__main__":
    unittest.main()

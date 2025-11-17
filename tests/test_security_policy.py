import unittest
from pathlib import Path

REPO_ROOT = Path(__file__).resolve().parents[1]
SECURITY_FILE = REPO_ROOT / "SECURITY.md"


class SecurityPolicyTests(unittest.TestCase):
    def setUp(self):
        self.contents = SECURITY_FILE.read_text(encoding="utf-8") if SECURITY_FILE.exists() else ""

    def test_security_policy_file_exists(self):
        self.assertTrue(
            SECURITY_FILE.exists(),
            "SECURITY.md should exist to describe the project's security posture.",
        )

    def test_supported_versions_table_present(self):
        self.assertIn("## Supported Versions", self.contents)
        self.assertIn("| Version | Supported", self.contents)
        expected_rows = [
            "| 5.1.x   | :white_check_mark: |",
            "| 5.0.x   | :x:                |",
            "| 4.0.x   | :white_check_mark: |",
            "| < 4.0   | :x:                |",
        ]
        for row in expected_rows:
            with self.subTest(row=row):
                self.assertIn(row, self.contents)

    def test_reporting_section_present(self):
        self.assertIn("## Reporting a Vulnerability", self.contents)
        self.assertIn("Use this section to tell people how to report a vulnerability.", self.contents)


if __name__ == "__main__":
    unittest.main()

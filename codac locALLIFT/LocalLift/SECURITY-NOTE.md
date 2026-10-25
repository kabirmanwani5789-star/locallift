# Security note

This is an educational project package, not production-ready software.

- The original SQL export contained a default admin email/password; that seed row was removed from the submission copy.
- The existing admin login implementation compares passwords as plain text and builds a query using input-derived values. Replace it with prepared statements, `password_hash()` / `password_verify()`, session ID regeneration, and proper authorization checks before any public deployment.
- Do not commit real passwords, database credentials, customer data, or private keys to GitHub.

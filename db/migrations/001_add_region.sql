ALTER TABLE sessions ADD COLUMN region VARCHAR(8) NULL;
CREATE INDEX ix_sessions_region ON sessions (region);

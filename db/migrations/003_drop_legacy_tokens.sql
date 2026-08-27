DROP TABLE legacy_tokens;
ALTER TABLE sessions DROP COLUMN legacy_token_id;
ALTER TABLE sessions MODIFY COLUMN token VARCHAR(512) NOT NULL;

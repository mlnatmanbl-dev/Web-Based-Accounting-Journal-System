SELECT * FROM journals;
SELECT * FROM journal_items;
SELECT * FROM accounts;

SELECT * FROM journals AS j
LEFT JOIN journal_items AS ji ON j.id=ji.journal_id
LEFT JOIN accounts AS a ON a.code=ji.code;

SELECT j.transaction_date, j.reff_code,
a.name, a.code, ji.debit, ji.credit 
FROM journals AS j
LEFT JOIN journal_items AS ji ON j.id=ji.journal_id
LEFT JOIN accounts AS a ON a.code=ji.code;

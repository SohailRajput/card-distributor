**Add Indexes**
We can create indexes of the following columns to further optimize the query
- jobs.job_category_id
- jobs.job_type_id
- jobs.sort_order
- job_types.deleted
- job_categories.deleted
- jobs.deleted
- Personalities.name
- PracticalSkills.name
- BasicAbilities.name

** Enable Fulltext Search**
To optimize LIKE we can make the columns fulltext search indexes.
- jobs.deleted
- job_types.deleted
- jobs.job_category_id-
- jobs.job_type_id

** Remove Unwanted Joins **
- JobsPersonalities
- JobsPracticalSkills
- JobsBasicAbilities

Other than that there are multiple ways to optimize database which can also lead to the solution of slowness.
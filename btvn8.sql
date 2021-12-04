-- Tính chất lượng TB của từng giáo viên

SELECT 
    tc.id, tc.name, SUM(c.quality) / COUNT(c.id) AS CLTB
FROM
    teacher AS tc
        LEFT JOIN
    teachingclass AS th ON th.teacherId = tc.id
        LEFT JOIN
    class c ON th.classId = c.id
GROUP BY tc.id , tc.name
HAVING CLTB >= 4




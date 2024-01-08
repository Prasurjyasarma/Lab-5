function calc() {
  var m1,
    m2,
    m3,
    avg = 0,
    total = 0,
    result = "",
    grade = "";

  m1 = parseInt(document.form1.wp.value);
  m2 = parseInt(document.form1.da.value);
  m3 = parseInt(document.form1.ai.value);

  total = m1 + m2 + m3;
  avg = total / 3;

  if (m1 < 21 || m2 < 21 || m3 < 21) {
    result = "Fail";
    grade = "D";
  } else if (avg >= 75) {
    result = "Distinction";
    grade = "A+";
  } else if (avg >= 60 && avg < 75) {
    result = "First class";
    grade = "A";
  } else if (avg >= 50 && avg < 60) {
    result = "Second class";
    grade = "B";
  } else if (avg >= 35 && avg < 50) {
    result = "Pass class";
    grade = "C";
  } else if (avg < 35) {
    result = "Fail";
    grade = "D";
  }

  document.form1.result.value = result;
  document.form1.grade.value = grade;
  document.form1.total.value = total;
  document.form1.average.value = avg;
}

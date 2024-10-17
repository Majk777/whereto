console.log("hello world");

const cookie = document.getElementById("cookie-info");
const cookieButton = document.getElementById("accept-cookies");
const backButton = document.getElementById("backButton");
const forwardButton = document.getElementById("forwardButton");
const slider = document.getElementById("slider");
const header = document.getElementById("main-header");
const burger = document.getElementById("active-burger");
const upperClip = document.getElementsByClassName("clip-up")[0];
const downerClip = document.getElementsByClassName("clip-down")[0];
const blogContent = document.getElementsByClassName("content");

if (cookieButton) {
  cookieButton.addEventListener("click", function () {
    setCookie();
    console.log("button yay!");
    document.getElementById("cookie-info").classList.add("hidden");
  });
}

// Funkcja do ustawienia ciasteczka
function setCookie() {
  // Ustawienie pliku cookie po zaakceptowaniu
  document.cookie =
    "cookie_accepted=1; expires=" +
    new Date(Date.now() + 24 * 60 * 60 * 1000).toUTCString() +
    "; path=/";
}

burger.addEventListener("click", function () {
  header.classList.toggle("h-80");
});

const commentData = document.getElementsByClassName(
  "comment-meta commentmetadata"
);

function filterText(text) {
  const months = {
    January: "01",
    February: "02",
    March: "03",
    April: "04",
    May: "05",
    June: "06",
    July: "07",
    August: "08",
    September: "09",
    October: "10",
    November: "11",
    December: "12",
  };

  let result = "";
  let monthConverted = "";

  const dateMatch = text.match(
    /([a-zA-Z]+) (\d{1,2}), (\d{4}) at (\d{1,2}:\d{2} [apm]{2})/
  );

  if (dateMatch) {
    const [, month, day, year, time] = dateMatch;

    if (month in months) {
      monthConverted = months[month];
    }

    const formattedResult = `${day}.${monthConverted}.${year} ${time.replace(
      /[apm]+/i,
      ""
    )}`;

    return formattedResult;
  }

  return result;
}

for (const element of commentData) {
  const innerTextValue = element.innerText;
  element.innerHTML = filterText(innerTextValue);
  console.log(innerTextValue);
  console.log(filterText(innerTextValue));
}

// zoom for blog (posts and protips) posts
console.log(blogContent);
for (const content of blogContent) {
  content.addEventListener("mouseover", function () {
    // Pobierz rodzica diva
    const parent = this.parentElement;
    console.log(parent);
    // console.log(grandparent);

    // Pobierz brata rodzica
    const sibling = parent.previousElementSibling;
    console.log(sibling);

    // Sprawdź, czy brat istnieje i czy jest divem
    if (sibling && sibling.tagName === "DIV") {
      // Ustaw styl transform dla brata rodzica
      sibling.style.transform = "scale(1.2)";
    }
  });
}
// FRONT-PAGE.PHP

const clipEffect = () => {
  upperClip.classList.add("clipped");
  setTimeout(() => {
    upperClip.classList.remove("clipped");
  }, 1250);

  downerClip.classList.add("clipped");
  setTimeout(() => {
    downerClip.classList.remove("clipped");
  }, 1250);
};

if (backButton && forwardButton) {
  backButton.addEventListener("click", () => {
    console.log("backButton was clicked");
    console.log(slider);
    setTimeout(() => {
      if (slider.classList.contains("slider1")) {
        slider.classList.remove("slider1");
        slider.classList.add("slider3");
      } else if (slider.classList.contains("slider3")) {
        slider.classList.remove("slider3");
        slider.classList.add("slider2");
      } else if (slider.classList.contains("slider2")) {
        slider.classList.remove("slider2");
        slider.classList.add("slider1");
      }
    }, 1100);

    clipEffect();
  });

  forwardButton.addEventListener("click", () => {
    console.log("forwardButton was clicked");
    console.log(slider);
    setTimeout(() => {
      if (slider.classList.contains("slider1")) {
        slider.classList.remove("slider1");
        slider.classList.add("slider2");
      } else if (slider.classList.contains("slider2")) {
        slider.classList.remove("slider2");
        slider.classList.add("slider3");
      } else if (slider.classList.contains("slider3")) {
        slider.classList.remove("slider3");
        slider.classList.add("slider1");
      }
    }, 1100);

    clipEffect();
  });
}

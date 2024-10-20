const { createApp, ref, computed, onMounted } = Vue;

function createFormData(obj) {
  let formData = new FormData();

  for (let item in obj) {
    formData.append(item, obj[item]);
  }

  return formData;
}

createApp({
  setup() {
    const defaultTitle = "Let's run the task!";
    const title = ref(defaultTitle);
    const password = ref('')
    const disableButton = ref(false)
    const contactMessage = ref('Saya berminat dengan rumah ini.')
    const contactName = ref('')

    const whatsappLink = computed(() => {
      return `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=Halo,%20saya%20${contactName.value}.%20${contactMessage.value}`;
    })

    onMounted(() => {
      $(".details-slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        items: 10,
        navText: [
          "<i class='fa-solid fa-angle-left'></i>",
          "<i class='fa-solid fa-angle-right'></i>",
        ],
        autoplay: true,
        smartSpeed: 3000,
        autoplayTimeout: 4000,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    })

    const runTask = () => {
      title.value = "Running task..."
      disableButton.value = true
      axios
        .post(
          `${baseURL}dev-page/run-task`,
          {
            password: password.value,
          },
          {
            transformRequest: [
              (data) => {
                return createFormData(data);
              },
            ],
          }
        )
        .then(({ data }) => {
          if(data.message === 'Failed') {
            title.value = "There's something wrong. Have you entered the correct password?";
            setTimeout(() => {
              title.value = defaultTitle;
            }, 5000);
          } else {
            setTimeout(() => {
              title.value = "Task completed!"
              setTimeout(() => {
                title.value = defaultTitle
              }, 3000);
            }, 500);
          }
          disableButton.value = false
        })
        .catch(function (error) {
          console.log(error);
        });
    } 
    
    return {
      title,
      password,
      disableButton,
      contactName,
      whatsappLink,
      contactMessage,
      runTask
    };
  },
}).mount("#app");

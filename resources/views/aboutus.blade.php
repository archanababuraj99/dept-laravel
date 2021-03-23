@extends("theme")
@section("content")

      <div class="container">
          <div class="row">
              <div class="col">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                   
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img  height="500" width="200" src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>About the institution</h5>
                          <p>St Kuriakose Elias Chavara</p>
                        </div>
                      </div>
                     
                     
                    </div>
                  
                  </div>
              </div>
          </div>
          <div class="row">
              <p>
                Rajagiri College of Social Sciences (RCSS), together with its sister educational concerns, owes its existence to the CMI (Carmelites of Mary Immaculate) fathers, the first ever indigenous religious congregation for men in the Syrian Catholic tradition of Christianity in India. The CMIs drawing inspiration from their founding father St. Kuriakose Elias Chavara, a great visionary, reformer and religious leader of the 19th century, have proven themselves worthy of that heritage in the field of education by establishing institutions of excellence imparting quality education, across the length and breadth of the State, and in various parts of India. At present, the CMIs manage a network of more than 800 Schools, 13 Special Schools, 41 Arts, Science, Commerce & Physical Education Colleges, 10 B.Ed. Colleges, 4 Nursing Colleges, 4 Engineering Colleges, one Medical College, one University, 3 Law Colleges, 6 Research Centres, 7 Technical Institutes, 41 Hostels & Boarding Houses, 17 Cultural Centres, 2 Super Speciality Hospitals and 114 Non-formal Education Centres.  

                Rajagiri College of Social Sciences (Autonomous) was established as a result of the indefatigable industry and foresight of the CMI. The various axioms of the insitution maintain the axiomatic spirit of Rajagiri - ‘Relentlessly Towards Excellence’.
                
                Rajagiri has successfully established and maintained the apt ambience for learning and the highest level of academic performance by providing state-of-the-art infrastructure and facilities in these institutions. International partnerships have been established with reputed Management and Social Work institutions across the globe. This allows the College, the faculty and the students to stay abreast of the constant changes occurring as Rajagiri is becoming truly global, with its graduates being placed and working around the world.
                
                Rajagiri College of Social Sciences (RCSS) is the eldest child of Rajagiri Vidyapeedam (Rajagiri group of educational institutions). It is located on two picturesque campuses- the Hill Campus at Kalamassery and the Valley campus at Kakkanad in Kochi, in the state of Kerala. RAJAGIRI literally means “The hill of the King” and derivatively it refers to the hillock where Jesus Christ is accepted as the King or the model, as the human embodiment of the virtues of love, truth and justice.
                
                The College had its origin as pioneers in professional social work education starting with a Diploma in social service way back in 1955 and adding on  Masters in Social Work (MSW), the first of its kind in Kerala State and one of the very few in South India. The specialization PM & IR then offered in MSW programme gave way for additional Programme -Masters in Personnel Management & Industrial Relations which is the present MHRM offered on campus.
                
                The College then started under the University of Madras, later came under the University of Kerala and after 1986 affiliated to MG University, Kottayam. Over the years the College started expanding its horizons to the Management studies, Computer Science, Library and Information Science, Behavioral Science and Commerce. The MBA and MCA Programmes are approved by All India Council for Technical Education (AICTE). The College is presently offering 16 Programmes (Graduate, Postgraduate, Postgraduate Diploma and PhD) under 7 Departments. Rajagiri Centre for Business Studies (RCBS) is a brand owned by the College representing all the management Programmes of the College.
              </p>
          </div>
      </div>

@endsection
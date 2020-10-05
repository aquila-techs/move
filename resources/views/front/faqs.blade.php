@extends('layouts.front.template')

<style>
    ol { padding-left: 40px !important; }
</style>

@section('content')

@php $root = env('ROOT_FOLDER'); @endphp

			<!-- Including header -->
		@include('front.includes.header')


		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>FAQs</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">FAQs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9">

							<div id="faqs" class="faqs">

								<div class="toggle faq">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-question-sign"></i>
											<i class="toggle-open icon-question-sign"></i>
										</div>
										<div class="toggle-title">
                                            What is my financial situation going to be like after I move?
                                        </div>
									</div>
									<div class="toggle-content">
                                        <p>
                                            Evaluation of any new community should begin with a cost of living analysis. If the costs are substantially higher than in your present area, you will need to approach your employer and discuss the differentials. If you are moving on your own, you need to factor moving expenses into your calculations and consider your financial situation now and what you realistically perceive to be your prospective salary when you are resettled.
                                        </p>
                                        <p>
                                            If you are a two-career family, consider that one salary could be temporarily deleted when you move. Do you understand the full impact of the company-requested relocation? Will this move lead to a promotion and ultimately monetary compensation?   You need to think about changes in your personal day to day expenses, such as travel expenses, telephone charges, insurance rates, food and clothing purchases, entertainment expense and of course real estate costs. Real estate considerations have to be significant. Think of all the costs associated with buying and selling a home as well as the cost of homes in the new area. Factor in the expenses of redecorating a new home or purchasing new furniture. Evaluate homes by comparing the square footage, layout of the living space, number of rooms and etc.
                                        </p>
                                    </div>
								</div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Should I visit my new city/town beforehand?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            After you have done a careful analysis of the cost of living and feel comfortable with your decision to relocate, you need to plan a visit to the new city. But remember - this is not a vacation, this is a working trip! Before leaving, locate a real estate representative in the new area to assist you. Your goal is to have a buyer broker or real estate agent working for you and ready to help as soon as you arrive. Take furniture measurements with you because they will prove very valuable when you try to determine whether your existing furniture will fit in intended rooms in the new house. Also take along your camera and a comprehensive list of chores you want to accomplish while you are in the new city.
                                        </p>
                                        <p>
                                            It is recommended to plan at least one extra day in your schedule to locate some of the services, such as elder-care or day-care facilities, in your new community. It is imperative that you're well-prepared on the first day in your new city/town. It is becoming more common for companies to assist newcomers with these types of services, so be sure to ask for professional help. If time allows, drop in to various agencies and organizations you are evaluating and introduce yourself. Be sure to keep business cards in order to have the names, services and locations on file.
                                        </p>
                                        <p>
                                            A very practical step to take during this trip is to open a bank account at the bank of your choice. If you open an account and reserve a safety-deposit box at this time, you will be able to cash checks for local businesses as soon as you move in. It will also eliminate the expense of wiring funds to a new bank. Try to locate a bank branch that will be conveniently close to your new home.
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            What are the most important organizations to locate in my new community?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            As soon as you can in your new area, locate hospitals and health-centers. This strategy never fails! When you move someone can get sick or have an accident.   It is a proven fact that moving places extra stress on families and, consequently, you are more vulnerable to accidents or illness at this time.
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            How can I make an educated choice of a new school for my children?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            Finding new schools that are right for your children is a high priority and requires in-depth research. One method is to look for a fitting school before looking for a new home. Usually, when you find an excellent school, the real estate market in the surrounding area is a favorable one as well. Selecting the right school begins in making sure the courses correlate with your child's last school specifications and his or her goals for further education.
                                        </p>
                                        <p>
                                            A personal visit to any school you are considering is highly recommended. If your children/teens are with you at a time, it might give them the opportunity to check the place out, to see if they feel at ease within the school's walls. Making this choice without your child/teen may result in him/her disliking the new environment at a point of their arrival. Children's identity is partly formed by feeling relaxed in a social group, so it's important to make serious effort to find a school that has both the educational program required and a comfortable social atmosphere. When visiting the school, your child/teen will also be able to see what passes for acceptable attire/style, allowing him or her to blend in more easily on the first day of school.
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            How can I fund an appropriate day-care center for the little ones?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            Visit at least three-four centers and spend time with children and their instructors. This e will help you to evaluate the center's environment, cleanliness, values and educational capabilities. Nearly every community in North America now has a central source of information about local child-care options. These services are called child-care resource and referral agencies, or "R&Rs." Such services help parents locate licensed child-care centers, family day-care homes and in-home caregivers quickly and also evaluate the care.
                                        </p>
                                        <p>
                                            You have thoroughly researched your destination, packed your belongings and made arrangements with a moving company. As the day of departure closes in you might have questions about your best course of action in terms of relating to the movers, watching over your possessions and property, and making sure that all paperwork gets done timely and properly. The following list will help you to prepare for the big day and ease any worries or concerns you might have.
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            What information do I need to provide to schedule my move?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            Typically, moving companies will ask you for the following: address (including zip/postal code), phone number, destination city and state/province. Other information, such as additional stops, unusual items to be shipped (cars, boats, tractors, etc.) also need to be identified at this time.
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            What should I do if I suddenly need to reschedule?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            Call your move coordinator as soon as possible, even if you do not yet know your new move dates, so scheduling changes can be made.


                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Will I be able to take everything with me?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            Ask your company if there are any items that they won't be able to ship for you! Before your possessions are loaded, it is important to understand which items cannot be shipped because they might represent a hazard or are perishable. The list of the items, which the company will refuse to ship, is usually found on a company's website.
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Do I have to be present for all phases of the move process?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            You will need to be present during all phases of the move: the survey, packing, loading, and unloading to assure that all items which you intend to transport are surveyed, packed, loaded, and delivered. You will need to do a final walk through at both origin and destination to:
                                        </p>
                                        <ol>
                                            <li>
                                                Make sure that there is no damage to the residence
                                            </li>
                                            <li>
                                                Make sure that everything has been loaded
                                            </li>
                                            <p>
                                                If there is any damage, exceptions have to be noted on the paperwork prior to the driver or packing crew's departure or the claim will be denied. You will need to sign all paperwork at both origin and destination.
                                            </p>
                                        </ol>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            If our new home is not ready to move into, where can we store our goods?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            It depends on the moving policy of your company. Preferably, storage arrangements should be made and finalized prior to the move process.
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Will a moving company agree to transport high-value items?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            Yet again, the answer found within the policy of your chosen company. If they provide this service you will need to advise them in writing that you are including expensive objects with your shipment. You might have to fill a special form at a time of the crew's arrival at your residence. Here is an approximate list of the items considered "high-value" by most moving companies:
                                        </p>
                                        <ol>
                                            <li>
                                                Antiques
                                            </li>
                                            <li>
                                                Oriental rugs
                                            </li>
                                            <li>
                                                Art collections
                                            </li>
                                            <li>
                                                Silver and silverware
                                            </li>
                                            <li>
                                                Crystal tapestries
                                            </li>
                                            <li>
                                                Furs
                                            </li>
                                            <li>
                                                Figurines
                                            </li>
                                            <li>
                                                Televisions, stereos and video cameras
                                            </li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            What should I do in case my items have been damaged?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            As soon as you notice the damage, bring it to the driver's attention. You should contact the move coordinator/manager who is taking care of your move and make him/her aware of the problem. A claim form will then be mailed to you, or you will be forwarded to the appropriate claims manager for assistance. The following information for a damaged item will be needed when filing your claim:
                                        </p>
                                        <ol>
                                            <li> Description/name of the item </li>
                                            <li> Inventory tag number </li>
                                            <li> The year that item was purchased </li>
                                            <li> The value that you are placing on the item </li>
                                            <li> The nature and extent of damage </li>
                                            <li> The original cost of the item </li>
                                        </ol>
                                        <p>
                                            Do not discard any item that is damaged until a representative has had the opportunity to inspect the items!
                                        </p>
                                    </div>
                                </div>

                                <div class="toggle faq">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-question-sign"></i>
                                            <i class="toggle-open icon-question-sign"></i>
                                        </div>
                                        <div class="toggle-title">
                                            When will the household goods inventory take place?
                                        </div>
                                    </div>
                                    <div class="toggle-content">
                                        <p>
                                            Immediately prior to loading, the driver will make an inventory of all of your household goods that are to be moved. The purpose is to make a record of the condition of each item. You have the right and responsibility to be present at this time and ask any questions. You can also view the items to which the driver is taking exception. You have the right to make any notations, which you feel are appropriate. After completing the inventory, the driver will sign the paperwork and ask you to sign each page. It is important that before signing you make sure that the inventory lists all items in your shipment and that the entries regarding the condition of your items are correct. You have the right to note any disagreement that you may have. This can be noted on the paperwork next to the item that is listed or you can make notes in the space provided at the bottom of the inventory sheet.
                                        </p>
                                        <p>
                                            When your shipment arrives and check-off is complete, your ability to collect from the mover on any loss or damage may depend on the notations that you make. The driver will provide you with copies of the Bill of Lading and a copy of each page of inventory. This paperwork is the "receipt" for your goods. At the time that your shipment is delivered, it is the transferee's responsibility to check items delivered against the items listed on your inventory as they come into your new home. If new damage is discovered, make record of it on the inventory form. Call the damage to the attention of the driver, and request that a record be made on the driver's copy of the inventory. The driver does not have to be the one to note damage or exception on the paperwork; it is your responsibility to make any notations that are necessary.
                                        </p>
                                        <p>
                                            After the complete shipment is unloaded, the driver will request that you again sign the driver's copy of the inventory to show that you received all items that were listed. Do not sign until you are sure that it is accurate and that the proper notations have been entered regarding any missing or damaged items. When you sign the inventory, you are giving the driver a receipt for your goods. Again, the driver will give you a copy of the completed inventories and Bill of Lading at destination. Be sure to retain both the origin and destination copies of the paperwork for your records.
                                        </p>
                                        <p>
                                            Remember, that as the transferee, you are the one responsible for handling all paperwork. You must make sure all documentation is complete and correct, and that all items are accounted for. It is up to you to see to the correct handling of your items during your relocation.
                                        </p>
                                    </div>
                                </div>

							</div>


						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">
                           @include('front.includes.sidebar')
						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->

    @include('front.includes.footer')
@endsection
